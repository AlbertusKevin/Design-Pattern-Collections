package After;

import java.util.ArrayList;
import java.util.Iterator;

public class SongOfThe70s implements SongIterator{
    ArrayList<SongInfo> bestSongs;

    public SongOfThe70s(){
        bestSongs = new ArrayList<SongInfo>();

        addSong("Song A 70", "Band A 70", 1971);
        addSong("Song B 70", "Band B 70", 1971);
        addSong("Song C 70", "Band C 70", 1971);
    }

    public void addSong(String songName, String bandName, int year){
        SongInfo songInfo = new SongInfo(songName, bandName, year);

        bestSongs.add(songInfo);
    }

//    public ArrayList<SongInfo> getBestSongs(){
//        return bestSongs;
//    }

    public Iterator createIterator() {
        return bestSongs.iterator();
    }
}
