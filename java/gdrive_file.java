import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.URI;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;
import java.net.http.HttpResponse;
import java.net.http.HttpHeaders;
import java.util.ArrayList;
import java.util.List;

public class Main {
    public static void main(String[] args) {
        String id = "1KZ8VW_Pmy0Mbtcc5H_dczFEI3lc4zI5O";
        String accessToken = ""; // Enter your Bearer Token
        
        String response = sacms(id, accessToken);
        System.out.println(response);
    }

    public static String sacms(String id, String accessToken) {
        String url = "https://samdb.eu.org/api/GDfile?id=" + id;
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
