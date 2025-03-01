#include "Baju.cpp"

int _cols[] = {2, 4, 5, 5, 5, 6, 4, 4, 4, 5};

void intro () {
    cout << "\n=============================================================\n";
    cout << "||               Welcome to Petshop Program!               ||\n";
    cout << "=============================================================\n\n";
}

void colCheck (vector<Baju> v) {
    _cols[0] = 2, _cols[1] = 4, _cols[2] = 5, _cols[3] = 5, _cols[4] = 5,
    _cols[5] = 6, _cols[6] = 4, _cols[7] = 4, _cols[8] = 4, _cols[9] = 5;
   
    for (auto& i : v) {
        _cols[0] = max(_cols[0], static_cast<int>(to_string(i.getID()).length())); if (_cols[0] % 2 == 1) _cols[0]++;
        _cols[1] = max(_cols[1], static_cast<int>(i.getNama().length())); if (_cols[1] % 2 == 1) _cols[1]++;
        _cols[2] = max(_cols[2], static_cast<int>(i.getJenis().length())); if (_cols[2] % 2 == 0) _cols[2]++;
        _cols[3] = max(_cols[3], static_cast<int>(i.getBahan().length())); if (_cols[3] % 2 == 0) _cols[3]++;
        _cols[4] = max(_cols[4], static_cast<int>(i.getWarna().length())); if (_cols[4] % 2 == 0) _cols[4]++;
        _cols[5] = max(_cols[5], static_cast<int>(i.getTarget().length())); if (_cols[5] % 2 == 1) _cols[5]++;
        _cols[6] = max(_cols[6], static_cast<int>(i.getSize().length())); if (_cols[6] % 2 == 1) _cols[6]++;
        _cols[7] = max(_cols[7], static_cast<int>(i.getMerk().length())); if (_cols[7] % 2 == 1) _cols[7]++;
        _cols[8] = max(_cols[8], static_cast<int>(to_string(i.getStok()).length())); if (_cols[8] % 2 == 1) _cols[8]++;
        _cols[9] = max(_cols[9], static_cast<int>(to_string(i.getHarga()).length())); if (_cols[9] % 2 == 0) _cols[9]++;
    }
}

void header (int cols[]) {
    cout << "+-"; for (int i = 0; i < cols[0]; i++) cout << "-";
    for (int i = 1; i < 10; i++) {
        cout << "-+-"; for (int j = 0; j < cols[i]; j++) cout << "-";
    } cout << "-+" << endl;
    cout << "| "; for (int i = 0; i < cols[0] - 2; i+=2) cout << " ";
    cout << "ID"; for (int i = 0; i < cols[0] - 2; i+=2) cout << " ";
    cout << " | "; for (int i = 0; i < cols[1] - 4; i+=2) cout << " ";
    cout << "NAMA"; for (int i = 0; i < cols[1] - 4; i+=2) cout << " ";
    cout << " | "; for (int i = 0; i < cols[2] - 5; i+=2) cout << " ";
    cout << "JENIS"; for (int i = 0; i < cols[2] - 5; i+=2) cout << " ";
    cout << " | "; for (int i = 0; i < cols[3] - 5; i+=2) cout << " ";
    cout << "BAHAN"; for (int i = 0; i < cols[3] - 5; i+=2) cout << " ";
    cout << " | "; for (int i = 0; i < cols[4] - 5; i+=2) cout << " ";
    cout << "WARNA"; for (int i = 0; i < cols[4] - 5; i+=2) cout << " ";
    cout << " | "; for (int i = 0; i < cols[5] - 6; i+=2) cout << " ";
    cout << "TARGET"; for (int i = 0; i < cols[5] - 6; i+=2) cout << " ";
    cout << " | "; for (int i = 0; i < cols[6] - 4; i+=2) cout << " ";
    cout << "SIZE"; for (int i = 0; i < cols[6] - 4; i+=2) cout << " ";
    cout << " | "; for (int i = 0; i < cols[7] - 4; i+=2) cout << " ";
    cout << "MERK"; for (int i = 0; i < cols[7] - 4; i+=2) cout << " ";
    cout << " | "; for (int i = 0; i < cols[8] - 4; i+=2) cout << " ";
    cout << "STOK"; for (int i = 0; i < cols[8]- 4; i+=2) cout << " ";
    cout << " | "; for (int i = 0; i < cols[9] - 5; i+=2) cout << " ";
    cout << "HARGA"; for (int i = 0; i < cols[9] - 5; i+=2) cout << " ";
    cout << " |" << endl;
    cout << "+="; for (int i = 0; i < cols[0]; i++) cout << "=";
    for (int i = 1; i < 10; i++) {
        cout << "=+="; for (int j = 0; j < cols[i]; j++) cout << "=";
    } cout << "=+" << endl;
}

void footer (int cols[]) {
    cout << "+-"; for (int i = 0; i < _cols[0]; i++) cout << "-";
    for (int i = 1; i < 10; i++) {
        cout << "-+-"; for (int j = 0; j < _cols[i]; j++) cout << "-";
    } cout << "-+" << endl;
}

void printRow (Baju data) {
    cout << "| "; for (int i = 0; i < _cols[0] - to_string(data.getID()).length(); i++) cout << " ";
    cout << data.getID() << " | " << data.getNama(); for (int i = 0; i < _cols[1] - data.getNama().length(); i++) cout << " ";
    cout << " | " << data.getJenis(); for (int i = 0; i < _cols[2] - data.getJenis().length(); i++) cout << " ";
    cout << " | " << data.getBahan(); for (int i = 0; i < _cols[3] - data.getBahan().length(); i++) cout << " ";
    cout << " | " << data.getWarna(); for (int i = 0; i < _cols[4] - data.getWarna().length(); i++) cout << " ";
    cout << " | " << data.getTarget(); for (int i = 0; i < _cols[5] - data.getTarget().length(); i++) cout << " ";
    cout << " | " << data.getSize(); for (int i = 0; i < _cols[6] - data.getSize().length(); i++) cout << " ";
    cout << " | " << data.getMerk(); for (int i = 0; i < _cols[7] - data.getMerk().length(); i++) cout << " ";
    cout << " | "; for (int i = 0; i < _cols[8] - to_string(data.getStok()).length(); i++) cout << " ";
    cout << data.getStok() << " | "; for (int i = 0; i < _cols[9] - to_string(data.getHarga()).length(); i++) cout << " ";
    cout << data.getHarga() << " |" << endl;
}

int main () {
    int idx = 6;
    vector<Baju> v;
    v.push_back(Baju(1, "Kostum Dinosaurus", "Kostum", "Polyester", "Hijau", "Kucing", "M", "Kittysaurus", 5, 150000));
    v.push_back(Baju(2, "Kaos Polos", "Polos", "Katun", "Putih", "Anjing", "L", "Hush Puppies", 10, 50000));
    v.push_back(Baju(3, "Batik Long Sleeve", "Motif", "Katun", "Cokelat", "Buaya", "XL", "Pasar Atlantis", 3, 1000000));
    v.push_back(Baju(4, "Kemeja Kotak-Kotak", "Kotak", "Flanel", "Merah", "Burung Kakaktua", "S", "Parro Apparel", 7, 200000));
    v.push_back(Baju(5, "Saata Andagii", "Polos", "Satin", "Hitam", "Kura-kura", "XS", "Louis Vuitamin", 15, 25000));
    string input;
    intro ();
    

    while (true) {
        cout << "Petshop> "; cin >> input;
        transform (input.begin(), input.end(), input.begin(), ::toupper);

        if (input == "EXIT") break;
        
        if (input == "ADD") {
            int harga, stok;
            string nama, jenis, bahan, warna, target, size, merk;
            cin.ignore(); getline(cin, nama, '"'); getline(cin, nama, '"');
            cin.ignore(); getline(cin, jenis, '"'); getline(cin, jenis, '"');
            cin.ignore(); getline(cin, bahan, '"'); getline(cin, bahan, '"');
            cin.ignore(); getline(cin, warna, '"'); getline(cin, warna, '"');
            cin.ignore(); getline(cin, target, '"'); getline(cin, target, '"');
            cin.ignore(); getline(cin, size, '"'); getline(cin, size, '"');
            cin.ignore(); getline(cin, merk, '"'); getline(cin, merk, '"');
            cin >> stok >> harga;
            Baju data = Baju (idx, nama, jenis, bahan, warna, target, size, merk, stok, harga);
            v.push_back(data); idx++;
            cout << "A new data has been added.\n\n";
        }

        else if (input == "SHOW") {
            colCheck (v);
            if (v.size() == 0) cout << "Data is empty!\n\n";
            else {
                header (_cols);
                for (auto& baju : v) printRow(baju);
                footer (_cols);
                cout << "Displaying " << v.size() << " record(s).\n\n";
            }
        }

        else cout << "Command not found!\n\n";
    }
}