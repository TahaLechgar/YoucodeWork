console.log('taha')
const project = document.getElementById('new-project')
console.log(project)
project.addEventListener('submit', (event) => {
    // event.preventDefault()
    console.log('taha')
    const technologiesElements = project.querySelectorAll('#technologies .tag')
    let allTechnologies = []
    technologiesElements.forEach(element => {
        allTechnologies.push(element.textContent)
    })
    console.log(allTechnologies)
    console.log(document.querySelector('#services').value)
})
