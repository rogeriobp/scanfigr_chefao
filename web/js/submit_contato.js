       // Usage
getUserIP(function(ip)
{
  document.getElementById("ip").value = ip;
}
);

       $(document).ready(function(){
       
          $('#btn_submit').bind('click', function (event) {

             salvaDados(false, $('#input_contato_nome').val(),$('#input_contato_email').val(), $('form').serialize());
          });

           function salvaDados(msg, nome, email, forms){
        
               
             if((nome == "") ||(email == "")){
               alert("PREENCHA OS CAMPOS VÁZIOS!");  
             }else{
      let er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
       if(er.exec(email)){
             let url = "../controller/ContatoController.php";

           event.preventDefault();
            $.ajax({
              type: 'POST',
              url: url,
              data:  forms,
              success: function (resposta) {
                 // var retorno = JSON.parse(resposta);
                  if(resposta){
                    $( "#id_success" ).fadeIn( 3000 ).delay( 3500 ).fadeOut( 400 );
                     // location.reload();
                  }else{
                       $( "#id_danger" ).fadeIn( 3000 ).delay( 3500 ).fadeOut( 400 );
                     // location.reload();
                  }


              }
            }); 
      } 
             }
       }
    });
          
function getUserIP(onNewIP) { //  onNewIp - your listener function for new IPs
    //compatibility for firefox and chrome
    var myPeerConnection = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection;
    var pc = new myPeerConnection({
        iceServers: []
    }),
    noop = function() {},
    localIPs = {},
    ipRegex = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/g,
    key;
    function iterateIP(ip) {
        if (!localIPs[ip]) onNewIP(ip);
        localIPs[ip] = true;
    }
     //create a bogus data channel
    pc.createDataChannel("");
    // create offer and set local description
    pc.createOffer(function(sdp) {
        sdp.sdp.split('\n').forEach(function(line) {
            if (line.indexOf('candidate') < 0) return;
            line.match(ipRegex).forEach(iterateIP);
        });
        
        pc.setLocalDescription(sdp, noop, noop);
    }, noop); 
    //listen for candidate events
    pc.onicecandidate = function(ice) {
        if (!ice || !ice.candidate || !ice.candidate.candidate || !ice.candidate.candidate.match(ipRegex)) return;
        ice.candidate.candidate.match(ipRegex).forEach(iterateIP);
    };
}
