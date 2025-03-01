import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    static int _cols[] = {2, 4, 5, 5, 5, 6, 4, 4, 4, 5};

    public static void intro() {
        System.out.println("\n=============================================================");
        System.out.println("||               Welcome to Petshop Program!               ||");
        System.out.println("=============================================================\n");
    }

    public static void colCheck(ArrayList<Baju> v) {
        _cols[0] = 2; _cols[1] = 4; _cols[2] = 5; _cols[3] = 5; _cols[4] = 5;
        _cols[5] = 6; _cols[6] = 4; _cols[7] = 4; _cols[8] = 4; _cols[9] = 5;

        for (Baju item : v) {
            _cols[0] = Math.max(_cols[0], String.valueOf(item.getID()).length()); if (_cols[0] % 2 == 1) _cols[0]++;
            _cols[1] = Math.max(_cols[1], item.getNama().length()); if (_cols[1] % 2 == 1) _cols[1]++;
            _cols[2] = Math.max(_cols[2], item.getJenis().length()); if (_cols[2] % 2 == 0) _cols[2]++;
            _cols[3] = Math.max(_cols[3], item.getBahan().length()); if (_cols[3] % 2 == 0) _cols[3]++;
            _cols[4] = Math.max(_cols[4], item.getWarna().length()); if (_cols[4] % 2 == 0) _cols[4]++;
            _cols[5] = Math.max(_cols[5], item.getTarget().length()); if (_cols[5] % 2 == 1) _cols[5]++;
            _cols[6] = Math.max(_cols[6], item.getSize().length()); if (_cols[6] % 2 == 1) _cols[6]++;
            _cols[7] = Math.max(_cols[7], item.getMerk().length()); if (_cols[7] % 2 == 1) _cols[7]++;
            _cols[8] = Math.max(_cols[8], String.valueOf(item.getStok()).length()); if (_cols[8] % 2 == 1) _cols[8]++;
            _cols[9] = Math.max(_cols[9], String.valueOf(item.getHarga()).length()); if (_cols[9] % 2 == 0) _cols[9]++;
        }
    }

    public static void header(int cols[]) {
        System.out.print("+-"); for (int i = 0; i < cols[0]; i++) System.out.print("-");
        for (int i = 1; i < 10; i++) {
            System.out.print("-+-"); for (int j = 0; j < cols[i]; j++) System.out.print("-");
        } System.out.println("-+");
        System.out.print("| "); for (int i = 0; i < cols[0] - 2; i+=2) System.out.print(" ");
        System.out.print("ID"); for (int i = 0; i < cols[0] - 2; i+=2) System.out.print(" ");
        System.out.print(" | "); for (int i = 0; i < cols[1] - 4; i+=2) System.out.print(" ");
        System.out.print("NAMA"); for (int i = 0; i < cols[1] - 4; i+=2) System.out.print(" ");
        System.out.print(" | "); for (int i = 0; i < cols[2] - 5; i+=2) System.out.print(" ");
        System.out.print("JENIS"); for (int i = 0; i < cols[2] - 5; i+=2) System.out.print(" ");
        System.out.print(" | "); for (int i = 0; i < cols[3] - 5; i+=2) System.out.print(" ");
        System.out.print("BAHAN"); for (int i = 0; i < cols[3] - 5; i+=2) System.out.print(" ");
        System.out.print(" | "); for (int i = 0; i < cols[4] - 5; i+=2) System.out.print(" ");
        System.out.print("WARNA"); for (int i = 0; i < cols[4] - 5; i+=2) System.out.print(" ");
        System.out.print(" | "); for (int i = 0; i < cols[5] - 6; i+=2) System.out.print(" ");
        System.out.print("TARGET"); for (int i = 0; i < cols[5] - 6; i+=2) System.out.print(" ");
        System.out.print(" | "); for (int i = 0; i < cols[6] - 4; i+=2) System.out.print(" ");
        System.out.print("SIZE"); for (int i = 0; i < cols[6] - 4; i+=2) System.out.print(" ");
        System.out.print(" | "); for (int i = 0; i < cols[7] - 4; i+=2) System.out.print(" ");
        System.out.print("MERK"); for (int i = 0; i < cols[7] - 4; i+=2) System.out.print(" ");
        System.out.print(" | "); for (int i = 0; i < cols[8] - 4; i+=2) System.out.print(" ");
        System.out.print("STOK"); for (int i = 0; i < cols[8]- 4; i+=2) System.out.print(" ");
        System.out.print(" | "); for (int i = 0; i < cols[9] - 5; i+=2) System.out.print(" ");
        System.out.print("HARGA"); for (int i = 0; i < cols[9] - 5; i+=2) System.out.print(" ");
        System.out.println(" |");
        System.out.print("+="); for (int i = 0; i < cols[0]; i++) System.out.print("=");
        for (int i = 1; i < 10; i++) {
            System.out.print("=+="); for (int j = 0; j < cols[i]; j++) System.out.print("=");
        } System.out.println("=+");
    }

    public static void footer(int cols[]) {
        System.out.print("+-"); for (int i = 0; i < cols[0]; i++) System.out.print("-");
        for (int i = 1; i < 10; i++) {
            System.out.print("-+-"); for (int j = 0; j < cols[i]; j++) System.out.print("-");
        } System.out.println("-+");
    }

    public static void printRow(Baju data) {
        System.out.print("| "); for (int i = 0; i < _cols[0] - String.valueOf(data.getID()).length(); i++) System.out.print(" ");
        System.out.print(data.getID() + " | " + data.getNama()); for (int i = 0; i < _cols[1] - data.getNama().length(); i++) System.out.print(" ");
        System.out.print(" | " + data.getJenis()); for (int i = 0; i < _cols[2] - data.getJenis().length(); i++) System.out.print(" ");
        System.out.print(" | " + data.getBahan()); for (int i = 0; i < _cols[3] - data.getBahan().length(); i++) System.out.print(" ");
        System.out.print(" | " + data.getWarna()); for (int i = 0; i < _cols[4] - data.getWarna().length(); i++) System.out.print(" ");
        System.out.print(" | " + data.getTarget()); for (int i = 0; i < _cols[5] - data.getTarget().length(); i++) System.out.print(" ");
        System.out.print(" | " + data.getSize()); for (int i = 0; i < _cols[6] - data.getSize().length(); i++) System.out.print(" ");
        System.out.print(" | " + data.getMerk()); for (int i = 0; i < _cols[7] - data.getMerk().length(); i++) System.out.print(" ");
        System.out.print(" | "); for (int i = 0; i < _cols[8] - String.valueOf(data.getStok()).length(); i++) System.out.print(" ");
        System.out.print(data.getStok() + " | "); for (int i = 0; i < _cols[9] - String.valueOf(data.getHarga()).length(); i++) System.out.print(" ");
        System.out.println(data.getHarga() + " |");
    }

    public static void main(String[] args) {
        int idx = 6;
        ArrayList<Baju> v = new ArrayList<>();
        v.add(new Baju(1, "Kaos Polos", "Kaos", "Katun", "Putih", "Kucing", "S", "Cat Casual", 15, 50000));
        v.add(new Baju(2, "Hoodie", "Hoodie", "Fleece", "Hitam", "Anjing", "M", "Doggy Hoodie", 10, 150000));
        v.add(new Baju(3, "Kemeja Flanel", "Kemeja", "Flanel", "Merah", "Kuda", "L", "Horse Flannel", 5, 250000));
        v.add(new Baju(4, "Tank Top", "Tank Top", "Katun", "Hijau", "Kelinci", "XS", "Bunny Tank", 20, 30000));
        v.add(new Baju(5, "Sweatshirt", "Sweatshirt", "Polyester", "Biru", "Bebek", "XL", "Duck Sweat", 7, 100000));
        Scanner scanner = new Scanner(System.in);
        intro();

        while (true) {
            System.out.print("Petshop> ");
            String input = scanner.nextLine().trim();
            String[] userInput = input.split(" ", 2);
            String inputCmd = userInput[0].toUpperCase();
            String str = userInput.length > 1 ? userInput[1] : "";

            if (inputCmd.equals("EXIT")) break;

            if (inputCmd.equals("ADD")) {
                String[] parts = str.split("\"");
                String nama = parts[1].trim();
                String jenis = parts[3].trim();
                String bahan = parts[5].trim();
                String warna = parts[7].trim();
                String target = parts[9].trim();
                String size = parts[11].trim();
                String merk = parts[13].trim();
                int stok = Integer.parseInt(parts[14].trim().split(" ")[0]);
                int harga = Integer.parseInt(parts[14].trim().split(" ")[1]);

                Baju data = new Baju(idx, nama, jenis, bahan, warna, target, size, merk, stok, harga);
                v.add(data); idx++;
                System.out.println("A new data has been added.\n");
            }

            else if (inputCmd.equals("SHOW")) {
                colCheck(v);
                if (v.isEmpty()) System.out.println("Data is empty!\n");
                else {
                    header(_cols);
                    for (Baju item : v) printRow(item);
                    footer(_cols);
                    System.out.println("Displaying " + v.size() + " record(s).\n");
                }
            }

            else System.out.println("Command not found!\n");
        }

        scanner.close();
    }
}