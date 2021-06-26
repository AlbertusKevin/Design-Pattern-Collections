package After;

import java.util.Arrays;
import java.util.Iterator;

public class SongOfThe80s implements SongIterator{
    SongInfo[] bestSongs;
    int arrayValue = 0;

    public SongOfThe80s(){
        bestSongs = new SongInfo[3];

        addSong("Song A 80", "Band A 80", 1989);
        addSong("Song B 80", "Band B 80", 1984);
        addSong("Song C 80", "Band C 80", 1985);
    }

    public void addSong(String songName, String bandName, int year){
        SongInfo songInfo = new SongInfo(songName, bandName, year);

        bestSongs[arrayValue] = songInfo;
        arrayValue++;
    }

//    public SongInfo[] getBestSongs(){
//        return bestSongs;
//    }

    @Override
    public Iterator createIterator() {
        return Arrays.asList(bestSongs).iterator();
    }
}
