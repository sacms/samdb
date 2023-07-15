import java.io.IOException;
import java.net.URI;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;
import java.net.http.HttpResponse;

public class Main {
    public static void main(String[] args) {
        String ip = "66.102.0.0";
        String accessToken = ""; // Enter your Bearer Token
        
        String response = sacms(ip, accessToken);
        System.out.println(response);
    }

    public static String sacms(String ip, String accessToken) {
        String url = "https://samdb.eu.org/api/ip?ip=" + ip;
        String data = "{}";

        HttpClient client = HttpClient.newHttpClient();
        HttpRequest request = HttpRequest.newBuilder()
                .uri(URI.create(url))
                .POST(HttpRequest.BodyPublishers.ofString(data))
                .header("Content-Type", "application/json")
                .header("Authorization", "Bearer " + accessToken)
                .build();

        try {
            HttpResponse<String> httpResponse = client.send(request, HttpResponse.BodyHandlers.ofString());
            return httpResponse.body();
        } catch (IOException | InterruptedException e) {
            e.printStackTrace();
            return "";
        }
    }
}
