function getCurrentURL () {
  return window.location.href
}

function visible(){
  const url = getCurrentURL()
  const str = url.toString()
  let j
  let display = []
  let check = ["plumbingservice","WaterHeaterService","WaterTreatmentService","HeatingService","CoolingService"]
  let options = check
  for (let i = 0; i < options.length; i++) {
    let j = i
    display[j] = document.getElementById('choice[' + j.toString() + ']');
    options[j] = document.getElementById(check[j])
    display[j].addEventListener('click', e=>{
      
      const hide = options.slice(0, j).concat(options.slice(j + 1, options.length))
      
      for (let k = 0; k < hide.length; k++) {
        if (str.search(check[k])>0) {
          hide[k].style.setProperty('visibility', 'hidden')
          console.log(hide[k])
          console.log(options[k])
        }
      }
      options[j].style.visibility = 'visible'
      })
  }
  return options[j]
}
sessionStorage.setItem("visfun", visible());