package Before;

import java.util.Hashtable;

public class SongOfThe90s {
    Hashtable<Integer, SongInfo> bestSongs = new Hashtable<Integer, SongInfo>();
    int hashKey = 0;

    public SongOfThe90s(){

        addSong("Song A 90", "Band A 90", 1991);
        addSong("Song B 90", "Band B 90", 1993);
        addSong("Song C 90", "Band C 90", 1991);
    }

    public void addSong(String songName, String bandName, int year){
        SongInfo songInfo = new SongInfo(songName, bandName, year);
        bestSongs.put(hashKey, songInfo);
        hashKey++;
    }

    public Hashtable<Integer, SongInfo> getBestSongs(){
        return bestSongs;
    }
}
