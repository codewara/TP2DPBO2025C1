class PetShop:
    __ID = 0
    __nama = ""
    __harga = 0
    __stok = 0

    def __init__(self, ID=0, nama="", harga=0, stok=0):
        self.__ID = ID
        self.__nama = nama
        self.__harga = harga
        self.__stok = stok

    def setID(self, ID):
        self.__ID = ID

    def getID(self):
        return self.__ID

    def setNama(self, nama):
        self.__nama = nama

    def getNama(self):
        return self.__nama

    def setHarga(self, harga):
        self.__harga = harga

    def getHarga(self):
        return self.__harga

    def setStok(self, stok):
        self.__stok = stok

    def getStok(self):
        return self.__stok