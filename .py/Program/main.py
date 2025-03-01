from Baju import Baju
from tabulate import tabulate

def intro():
    print("\n=============================================================")
    print("||               Welcome to Petshop Program!               ||")
    print("=============================================================\n")

def main():
    idx = 6
    v = [
        Baju(1, "Sweater Rajut", "Rajut", "Wol", "Abu-abu", "Kucing", "M", "Cat Couture", 8, 120000),
        Baju(2, "Jaket Denim", "Jaket", "Denim", "Biru", "Anjing", "L", "Doggy Denim", 6, 300000),
        Baju(3, "Rompi Kulit", "Rompi", "Kulit", "Hitam", "Kuda", "XL", "Horsewear", 4, 450000),
        Baju(4, "Piyama Sutra", "Piyama", "Sutra", "Merah Muda", "Kelinci", "S", "Bunny Sleepwear", 12, 200000),
        Baju(5, "Jas Hujan", "Jas", "PVC", "Kuning", "Bebek", "M", "Duck Raincoat", 9, 75000)
    ]
    intro()

    while True:
        user_input = input("Petshop> ").strip().split(maxsplit=1)
        input_cmd = user_input[0].upper()
        str = user_input[1] if len(user_input) > 1 else ""

        if input_cmd == "EXIT":
            break


        if input_cmd == "ADD":
            parts = str.split('"')
            nama = parts[1].strip()
            jenis = parts[3].strip()
            bahan = parts[5].strip()
            warna = parts[7].strip()
            target = parts[9].strip()
            size = parts[11].strip()
            merk = parts[13].strip()
            stok, harga = map(int, parts[14].strip().split())

            data = Baju(idx, nama, jenis, bahan, warna, target, size, merk, stok, harga)
            v.append(data); idx += 1
            print("A new data has been added.\n")


        elif input_cmd == "SHOW":
            if not v:
                print("Data is empty!\n")
            
            else:
                data = []
                for item in v:
                    data.append([item.getID(), item.getNama(), item.getJenis(), item.getBahan(), item.getWarna(),
                                 item.getTarget(), item.getSize(), item.getMerk(), item.getStok(), item.getHarga()])
                print(tabulate(data, headers=["ID", "NAMA", "JENIS", "BAHAN", "WARNA", "TARGET", "SIZE", "MERK", "STOK", "HARGA"], tablefmt="outline"))
                print(f"Displaying {len(v)} record(s).\n")

        else:
            print("Command not found!\n")

if __name__ == "__main__":
    main()