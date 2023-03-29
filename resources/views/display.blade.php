<!DOCTYPE html>
<html>
    <head>
        <title>Display</title>
    </head>
    <body>


        <h1>Reservations</h1>

        <table border = 1px align="center">

            <tr> 
                <td>Reservation Date</td>
                <td>Reservation Time</td>
                <td>Bowling Alley</td>
                <td>Number Of Adults</td>
                <td>Number Of Children</td>
            </tr>

            @foreach($data as $reservation)

            <tr>
                <td>{{$reservation->reservationdate}}</td>
                <td>{{$reservation->reservationtime}}<td>
                <td>{{$reservation->bowlingalley}}</td>
                <td>{{$reservation->numberofadults}}</td>
                <td>{{$reservation->numberofchildren}}</td>
            </tr>

         @endforeach
            
        </table>














<style> 
h1 
{ 
    text-align: center; 
}
</style>
    </body>
</html>