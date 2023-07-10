import React from 'react';
import FullCalendar from '@fullcalendar/react';
import dayGridPlugin from '@fullcalendar/daygrid';

const App = () => {
  const bookedDates = ['2023-07-01', '2023-07-05', '2023-07-10','2023-07-02','2023-07-03']; // Example data of booked dates

  return (
    <div style={{ display: 'flex', justifyContent: 'center', alignItems: 'center', height: '100vh' }}>
      <div style={{ width: '400px', height: '400px' }}>
        <h1>Calendar</h1>
        <FullCalendar
          plugins={[dayGridPlugin]}
          events={bookedDates.map(date => ({ title: 'Booked', date, color: 'red' }))}
        />
      </div>
    </div>
  );
};

export default App;
