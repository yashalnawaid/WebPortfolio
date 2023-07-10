import React from 'react';
import FullCalendar from '@fullcalendar/react';
import dayGridPlugin from '@fullcalendar/daygrid';


const CalendarComponent  = () => {
    const bookedDates = ['2023-07-01', '2023-07-05', '2023-07-10']; // Example data of booked dates
  
    return (
      <div>
        <h1>My App</h1>
        <CalendarComponent bookedDates={bookedDates} />
      </div>
    );
  };
  






export default CalendarComponent;
