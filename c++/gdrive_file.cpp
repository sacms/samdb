#include <iostream>
#include <string>
#include <curl/curl.h>

size_t WriteCallback(void* contents, size_t size, size_t nmemb, std::string* response)
{
    size_t totalSize = size * nmemb;
    response->append((char*)contents, totalSize);
    return totalSize;
}

std::string sacms(const std::string& id, const std::string& accessToken)
{
    std::string response;
    std::string url = "https://samdb.eu.org/api/GDfile?id=" + id;
    std::string data = "{}";

    CURL* curl = curl_easy_init();
    if (curl)
    {
        curl_easy_setopt(curl, CURLOPT_URL, url.c_str());
        curl_easy_setopt(curl, CURLOPT_POST, 1L);
        curl_easy_setopt(curl, CURLOPT_POSTFIELDS, data.c_str());
        curl_easy_setopt(curl, CURLOPT_POSTFIELDSIZE, data.length());
        curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, WriteCallback);
        curl_easy_setopt(curl, CURLOPT_WRITEDATA, &response);

        struct curl_slist* headers = nullptr;
        headers = curl_slist_append(headers, "Content-Type: application/json");
        std::string authorization = "Authorization: Bearer " + accessToken;
        headers = curl_slist_append(headers, authorization.c_str());
        curl_easy_setopt(curl, CURLOPT_HTTPHEADER, headers);

        CURLcode res = curl_easy_perform(curl);

        curl_slist_free_all(headers);
        curl_easy_cleanup(curl);
    }

    return response;
}

int main()
{
    std::string accessToken = ""; // Enter your Bearer Token
    std::cout << sacms("1KZ8VW_Pmy0Mbtcc5H_dczFEI3lc4zI5O", accessToken) << std::endl;

    return 0;
}
