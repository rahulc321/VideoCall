<html>
    
<body>
    <div id="meet"></div>

<script src='https://meet.jit.si/external_api.js'></script>
<script>
   const domain = "meet.jit.si";
   const options = {
     roomName: "shivam-rahul",
     width: 800, 
     height: 480,
     parentNode: document.querySelector('#meet'),
    //  configOverwrite: {},
    //  interfaceConfigOverwrite: { TOOLBAR_BUTTONS: [ ] },
    userInfo: {name: ""}
   };
   var isSteamOn = false;
   const api = new JitsiMeetExternalAPI(domain, options);
   
   api.addEventListener(`videoConferenceJoined`, () => {

        const listener = ({ enabled }) => {

            api.removeEventListener(`tileViewChanged`, listener);

            if (!enabled) {

                api.executeCommand(`toggleTileView`);

            }

        };

    });
</script>
</body>
</html>