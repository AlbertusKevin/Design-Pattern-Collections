package After;//package Before;

// Source: Derek Banas, youtube, Design Patterns Tutorial
public class Main {
        /*
            Kita buat sebuah interface yang didalamnya terdapat method createIterator, yang nantinya akan kita gunakan untuk melakukan perulangan terhada jenis collection yang berbeda dengan cara yang sama menggunakan iterator, sehingga kita tidak perlu menulis ulang beberapa kode yang sebelumnya dilakukan untuk menyesuaikan berbagai cara perulangan tergantung tiap jenis collectionnya. Dengan class-class yang implement terhadap interface, mendukung untuk dilakukannya polymorphism.
        */
    public static void main(String[] args) {
        SongOfThe70s song70s = new SongOfThe70s();
        SongOfThe80s song80s = new SongOfThe80s();
        SongOfThe90s song90s = new SongOfThe90s();

        DiscJockey madMike = new DiscJockey(song70s, song80s, song90s);

        madMike.showTheSongsIterator();
    }
}
