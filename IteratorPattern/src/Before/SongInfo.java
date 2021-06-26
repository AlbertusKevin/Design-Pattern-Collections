package Before;

public class SongInfo {
    String songname;
    String bandname;
    int yearReleased;

    public  SongInfo(String newSongName, String newBandName, int newYearReleased){
        this.songname = newSongName;
        this.bandname = newBandName;
        this.yearReleased = newYearReleased;
    }

    public int getYearReleased() {
        return yearReleased;
    }

    public String getBandname() {
        return bandname;
    }

    public String getSongname() {
        return songname;
    }
}
