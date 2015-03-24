Usage :

```
cd <your-piwik-directory>
git clone https://github.com/gboddin/MysqlPostConnectCommands plugins/MysqlPostConnectCommands
./console plugin:activate MysqlPostConnectCommands
```

Done.

Your timeout is now 20 minutes and only for CLI mode (browser triggered archiving is NOT supported)


Settings
--------

You can go in your Piwik backend to change the default commands sent to the mysql server upon archiving.

Go to Piwik > Administration > Plugin Settings > MysqlPostConnectCommands

