const body = document.querySelector('BODY')
const linkMaps = document.querySelector('.line__info--location')
const linkDate = document.querySelector('.line__info--date')
const linkTime = document.querySelector('.line__info--time')

const classNameMaps = 'hover--maps'
const classNameCalendar = 'hover--calendar'

function handleMapsEnter() {
  console.log('maps enter')
  body.classList.add(classNameMaps)
}

function handleCalendarEnter() {
  body.classList.add(classNameCalendar)
}

function handleMouseLeave() {
  body.classList.remove(classNameCalendar)
  body.classList.remove(classNameMaps)
}

linkMaps.addEventListener('mouseenter', handleMapsEnter)
linkDate.addEventListener('mouseenter', handleCalendarEnter)
linkTime.addEventListener('mouseenter', handleCalendarEnter)

linkMaps.addEventListener('mouseleave', handleMouseLeave)
linkDate.addEventListener('mouseleave', handleMouseLeave)
linkTime.addEventListener('mouseleave', handleMouseLeave)


function handleLoad() {
  body.classList.add('loaded')
}

function handleBeforeUnload() {
}

window.addEventListener('load', handleLoad)
window.addEventListener('beforeunload', handleBeforeUnload);
