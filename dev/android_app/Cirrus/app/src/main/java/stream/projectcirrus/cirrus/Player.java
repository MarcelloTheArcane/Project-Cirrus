package stream.projectcirrus.cirrus;

/**
 * Created by travis on 22/11/2016.
 */
import android.media.MediaPlayer;
import android.media.AudioManager;
import android.util.Log;

import java.io.IOException;

public class Player {

    MediaPlayer mediaPlayer = new MediaPlayer();
    public static Player player;
    String url = "";

    public Player () {
        this.player = this;
    }

    public void playStream (String url) {
        if (mediaPlayer != null) {
            try {
                mediaPlayer.stop();
            } catch (Exception e) {

            }
            mediaPlayer = null;

        }
        mediaPlayer = new MediaPlayer();
        mediaPlayer.setAudioStreamType(AudioManager.STREAM_MUSIC);
        try {
            mediaPlayer.setDataSource(url);
            mediaPlayer.setOnPreparedListener(new MediaPlayer.OnPreparedListener() {
                @Override
                public void onPrepared(MediaPlayer mp) {
                    mediaPlayer.start();
                }
            });
            mediaPlayer.prepareAsync();

        } catch (IOException e) {
            e.printStackTrace();
        }
    }
    public void pausePlayer () {
        try {
            mediaPlayer.pause();
        }
        catch (Exception e) {
            Log.d("EXCEPTION", "failed to pause media player");
        }
    }
    public void playPlayer () {
        try {
            mediaPlayer.start();
        }
        catch (Exception e) {
            Log.d("EXCEPTION", "failed to play media player");
        }
    }
    public void togglePlayer () {
        try {
            if (mediaPlayer.isPlaying())
                pausePlayer();
            else
                playPlayer();
        } catch (Exception e) {
            Log.d("EXCEPTION", "failed to toggle media player");
        }
    }
}
