import React from 'react'
import C9Calendar from '../C9Calendar'
import events from '../../data/events.json'

const Calendar = () => {
    return (
        <section className="calendar container">
            <h1 className="title">ปฏิทินกิจกรรม</h1>

            <hr className="my-2" />

            <div className="calendar-wrapper">
                {/* ======================== Google Calendar ======================== */}
                {/* <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FBangkok&showTitle=0&src=c2FueWF0aDAwN0BnbWFpbC5jb20&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZnJlZWxhbmNlYmF5LmNvbV9uN2JsbXFmcWIxNWdobGhyaWxtMDRqcmF0MEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=dGgudGgjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%23E4C441&color=%23009688" style={{ border: '0' }} width="800" height="600" frameBorder="0" scrolling="no"></iframe> */}
                {/* ======================== Google Calendar ======================== */}

                <C9Calendar events={events} />
            </div>
        </section>
    )
}

export default Calendar