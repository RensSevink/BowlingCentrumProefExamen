<!DOCTYPE html>
 <html>
  <head>
    <title>Reservation</title>
    <link rel="stylesheet" href="resources\css\app.css">
  </head>
    <body>

        <div align="center"> 
            <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div style="padding: 20px;">
                    <label for="reservationnumber">Reservation Number</label>
                    <input type="number" id="reservationnumber" name="reservationnumber">
                </div>
                <div style="padding: 20px;">
                    <label for="reservationdate">Reservation Date</label>
                    <input type="date" id="reservationdate" name="reservationdate">
                </div>
                <div style="padding: 20px;">
                    <label for="reservationtime">Reservation Time</label>
                    <input type="time" id="reservationtime" name="reservationtime">
                </div>
                <div style="padding: 20px;">
                    <label for="bowlingalley">Bowling Alley</label>
                    <input type="number" id="bowlingalley" name="bowlingalley">
                </div>
                <div style="padding: 20px;">
                    <label for="helpfences">Help Fences</label>
                    <input type="checkbox" id="helpfences" name="helpfences">
                </div>
                <div style="padding: 20px;">
                    <label for="numberofadults">Number of Adults</label>
                    <input type="number" id="numberofadults" name="numberofadults">
                </div>
                <div style="padding: 20px;">
                    <label for="numberofchildren">Number of Children</label>
                    <input type="number" id="numberofchildren" name="numberofchildren">
                </div>
                <div style="padding: 20px;">
                    <input type="submit">
                </div>
                <img src="https://media.newyorker.com/photos/59095bb86552fa0be682d9d0/master/w_2560%2Cc_limit/Monkey-Selfie.jpg" alt="" width="500" height="600">
            
            </form> 
        </div>

        
    </body>
</html>