DO NOT USE THIS PLUGIN :

 - I wrongly assumed the console script was directly connection to the database, this is not the case ...
 - Fixing needed : move the logic to the API event
 
Usage :

```
cd <your-piwik-directory>
git clone https://github.com/gboddin/PiwikMysqlFixTimeout plugins/MysqlFixTimeout
./console plugin:activate MysqlFixTimeout
```

Done.

Your timeout is now 20 minutes and only for CLI mode (browser triggered archiving is NOT supported)

