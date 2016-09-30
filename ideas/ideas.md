Need a streaming alternative to Spotify, opensource. (of course.)

So far - 

Website; that explains the idea and process
web player; for easy access to online music streaming from anywhere
desktop player; so users can download the app and listen to music at home etc
(optional) .apk  app; for future phones.
Storage; S3 seems best atm, although DB could be used to allow users to add their on music...?

website is fairly simple, just needs a front end, then perhaps somewhere they have to login to access a download page/front end to the music player.



desktop app; login, then have easy access to online music. needs to have a good UI, like spotify. 
              features such as favourites, whats popular, and playlists. 
              could also integrate other services, such as DB so users can add their own music.
              
              *Atom.io could be used to build this, creates nice UI.*
              
   
SERVER: use a ubuntu instance with docker, to host webserver etc. S3 for storage.
