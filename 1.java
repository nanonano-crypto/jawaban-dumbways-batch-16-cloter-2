package nanonano;

import java.security.SecureRandom;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.stream.Collectors;

public class satu {

	public static void main(String[] args) {
        String result = new SecureRandom().ints(0,36)
            .mapToObj(i -> Integer.toString(i, 36))
            .map(String::toUpperCase).distinct().limit(16).collect(Collectors.joining())
            .replaceAll("([A-Z0-9]{4})", "$1-").substring(0,19);

        System.out.println(result);
    }
}
