var redis = require('redis');

var client = redis.createClient();

client.on('connect', function(){
	console.log("Connected");
});


client.on('message', function(channel, message){
	console.log("Message: " + message + " Channel " + channel);
});

client.subscribe("new-activity:planrep");
