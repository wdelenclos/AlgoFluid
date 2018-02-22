
const coef = 0.5

const array = [0, 2,4,22, 8, 0]

// Calcul de la médiane. 
const mediane = 2



console.log(mediane)
// on appliatit
const array2 = array.map((value) => {
    let final
    if (value > mediane) {
        final = (value - mediane) * coef
    } else {
        final = (value + mediane) * coef
    }
    return final
})

console.log(array2)
