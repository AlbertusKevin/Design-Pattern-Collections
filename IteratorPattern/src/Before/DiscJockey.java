package Before;

import java.util.ArrayList;
import java.util.Enumeration;
import java.util.Hashtable;

public class DiscJockey {
    SongOfThe70s song70s;
    SongOfThe80s song80s;
    SongOfThe90s song90s;

    public DiscJockey(SongOfThe70s newSong70s, SongOfThe80s newSong80s, SongOfThe90s newSong90s){
        song70s = newSong70s;
        song80s = newSong80s;
        song90s = newSong90s;
    }


    // karena semua jenis song dari berbagai tahun disimpan dalam struktur collection yang berbeda-beda, maka kita harus iterasi tiap objek song tersebut dengan caranya masing-masing. Ini menghasilkan kode yang banyak dan juga duplikasi kode.

    public void  showTheSongs(){
        ArrayList al70sSongs = song70s.getBestSongs();
        System.out.println("Song of the 70s\n");
        for (int i = 0; i < al70sSongs.size(); i++) {
            SongInfo bestSongs = (SongInfo) al70sSongs.get(i);
            System.out.println(bestSongs.getSongname());
            System.out.println(bestSongs.getBandname());
            System.out.println(bestSongs.getYearReleased());
        }

        SongInfo[] al80sSongs = song80s.getBestSongs();
        System.out.println("Song of the 80s\n");
        for (int i = 0; i < al80sSongs.length; i++) {
            SongInfo bestSongs = al80sSongs[i];

            System.out.println(bestSongs.getSongname());
            System.out.println(bestSongs.getBandname());
            System.out.println(bestSongs.getYearReleased());
        }

        Hashtable<Integer, SongInfo> al90sSongs = song90s.getBestSongs();
        System.out.println("Song of the 90s\n");
        for (Enumeration<Integer> e = al90sSongs.keys(); e.hasMoreElements();) {
            SongInfo bestSongs = al90sSongs.get(e.nextElement());

            System.out.println(bestSongs.getSongname());
            System.out.println(bestSongs.getBandname());
            System.out.println(bestSongs.getYearReleased());
        }
    }
}
