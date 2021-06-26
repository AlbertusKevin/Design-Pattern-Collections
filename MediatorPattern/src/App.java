/*
     Digunakan untuk menangani komunikasi antar objek yang saling berelasi (Colleagues). Semua komunikasi ditangani oleh mediator dan antar Colleagues tidak perlu saling tahu.

     Definisi GOF: Loose coupling dengan mengenkapsulasi cara interaksi dan komunikasi antar object yang berbeda-beda sehingga aksi untuk setiap objek dapat bervariarsi dan independet dengan objek lainnya.

     Terdapat sebuah interface Mediator dan abstract class Colleague yang memiliki method yang sama. Masing-masing memiliki concrete classnya, dan Colleague ini akan memiliki sub class lainnya berupa objek nyata yang akan saling berinteraksi. Tiap kali antar objek berinteraksi, akan menggunakan method dari parent classnya (Colleague) untuk terhubung dengan mediator yang mengurus proses dari komunikasi antar objek
*/

public class App {
    public static void main(String[] args){
        StockMediator nyse = new StockMediator();
        GormanSlacks broker = new GormanSlacks(nyse);
        JTPoorman broker2 = new JTPoorman(nyse);
        broker.saleOffer("MSFT", 100);
        broker.saleOffer("GOOG", 50);
        broker2.buyOffer("MSFT", 100);
        broker2.saleOffer("NRG", 10);
        broker.buyOffer("NRG", 10);
        nyse.getstockOfferings();
    }
}
