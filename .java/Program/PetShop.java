public class PetShop {
    private int ID;
    private String nama;
    private int harga;
    private int stok;

    public PetShop() {
        this.ID = 0;
        this.nama = "";
        this.harga = 0;
        this.stok = 0;
    }

    public PetShop(int ID, String nama, int harga, int stok) {
        this.ID = ID;
        this.nama = nama;
        this.harga = harga;
        this.stok = stok;
    }

    public void setID(int ID) { this.ID = ID; }
    public int getID() { return this.ID; }

    public void setNama(String nama) { this.nama = nama; }
    public String getNama() { return this.nama; }

    public void setHarga(int harga) { this.harga = harga; }
    public int getHarga() { return this.harga; }

    public void setStok(int stok) { this.stok = stok; }
    public int getStok() { return this.stok; }
}