package After;

import java.util.ArrayList;
import java.util.Enumeration;
import java.util.Hashtable;
import java.util.Iterator;

public class DiscJockey {

    SongIterator iter70sSongs;
    SongIterator iter80sSongs;
    SongIterator iter90sSongs;

    public DiscJockey(SongIterator iter70sSongs, SongIterator iter80sSongs, SongIterator iter90sSongs){
        this.iter70sSongs = iter70sSongs;
        this.iter80sSongs = iter80sSongs;
        this.iter90sSongs = iter90sSongs;
    }


    // karena semua jenis song dari berbagai tahun disimpan dalam struktur collection yang berbeda-beda, maka kita harus iterasi tiap objek song tersebut dengan caranya masing-masing. Ini menghasilkan kode yang banyak dan juga duplikasi kode.

//    public void  showTheSongs(){
//        ArrayList al70sSongs = song70s.getBestSongs();
//        System.out.println("Song of the 70s\n");
//        for (int i = 0; i < al70sSongs.size(); i++) {
//            SongInfo bestSongs = (SongInfo) al70sSongs.get(i);
//            System.out.println(bestSongs.getSongname());
//            System.out.println(bestSongs.getBandname());
//            System.out.println(bestSongs.getYearReleased());
//        }
//
//        SongInfo[] al80sSongs = song80s.getBestSongs();
//        System.out.println("Song of the 80s\n");
//        for (int i = 0; i < al80sSongs.length; i++) {
//            SongInfo bestSongs = al80sSongs[i];
//
//            System.out.println(bestSongs.getSongname());
//            System.out.println(bestSongs.getBandname());
//            System.out.println(bestSongs.getYearReleased());
//        }
//
//        Hashtable<Integer, SongInfo> al90sSongs = song90s.getBestSongs();
//        System.out.println("Song of the 90s\n");
//        for (Enumeration<Integer> e = al90sSongs.keys(); e.hasMoreElements();) {
//            SongInfo bestSongs = al90sSongs.get(e.nextElement());
//
//            System.out.println(bestSongs.getSongname());
//            System.out.println(bestSongs.getBandname());
//            System.out.println(bestSongs.getYearReleased());
//        }
//    }

    public void showTheSongsIterator(){
        Iterator song70s = iter70sSongs.createIterator();
        Iterator song80s = iter80sSongs.createIterator();
        Iterator song90s = iter90sSongs.createIterator();

        System.out.println("Song of The 70s:\n");
        printTheSongs(song70s);
        System.out.println("Song of The 80s:\n");
        printTheSongs(song80s);
        System.out.println("Song of The 90s:\n");
        printTheSongs(song90s);
    }

    public void printTheSongs(Iterator iterator){
        while (iterator.hasNext()){
            SongInfo songInfo = (SongInfo) iterator.next();

            System.out.println(songInfo.getSongname());
            System.out.println(songInfo.getBandname());
            System.out.println(songInfo.getYearReleased());
        }
        System.out.println("\n\n");
    }
}
