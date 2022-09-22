let x = []
let y = document.getElementById('info')

let header = ["Plumbing Equipment",'Installation',
"Water Leak Repairs","Drain Replacement",
"Hydro Jetting Services","Water Heater Repair",
"Toilet Repair and Replacement",
"Main Sewer Line Repair and Replacement",
"Drain Clearing","Backflow Device Repair",
"Garbage Disposa","Video Camera Inspection",
"Tankless Water Heaters", "Water Heater Repair","Standard Water Heaters",
"Water Softeners","Water Specialty","Water Filtration System",
"Furaces and Boilers","Central Air Conditioners","Ductless Mini-split Air Conditioner",
"Hot Water Heaters","Geothermal Heating Systems","Heat Pump",
"Dependable Repairs","24/7 Emergency Services & Repairs",
"Central A/C","Ductless Mini Split","Geothermal"]

let careers = [ "Plumbing", "HVAC", "Electrical", "Administration"]

let title = document.getElementById('title')
sessionStorage.getItem("visfun")


for (var i = 0; i <header.length; i++) {
  let j = i
  x[j] = document.getElementById('services['+ j.toString() +']')
  //-------whole thing
  x[j].addEventListener('click', e=>{
  title.innerHTML = header[j]
    if (y.style.visibility !='visible'){
      y.style.visibility = 'visible'
      
    }
  })
}
//--------------content
let b = []

for (let i = 0; i < header.length; i++) {
  b[i] = document.getElementById('detail['+i.toString()+']')
  //b[i].style.visibility = "hidden" 

  x[i].addEventListener('click', e=>{
    if (b[i].style.visibility != 'visible'){
      const non_select = b.slice(0, i).concat(b.slice(i + 1, b.length))
      for(let j = 0; j < non_select.length; j++){
        if(non_select[j].style.visibility != 'hidden'){
          non_select[j].style.visibility = 'hidden'
        }
      }
      b[i].style.visibility = 'visible'
    }
  })
}
sessionStorage.clear()