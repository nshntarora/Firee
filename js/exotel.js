$.ajax({
    url: 'https://bla56:a3ae366ed3daadc288731b87bd94c9a815d86716@twilix.exotel.in/v1/Accounts/bla56/Calls/connect?From=9620821452&To=7639817688&CallerID=08039511718&Url=http://my.exotel.in/exoml/start/60166&CallType=trans',
    method: 'POST',
    dataType: 'json',
    success: function(data){
      console.log('succes: '+data);
    }
  });