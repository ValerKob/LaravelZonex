function filter() {
    let categories = document.getElementById('categories'),
    filter__categories = document.getElementById('filter__categories')
    categories.addEventListener('click', () => {
        categories.classList.toggle('active')
        filter__categories.classList.toggle('active__filter')
    })

    let color = document.getElementById('color'),
    filter__color = document.getElementById('filter__color')
    color.addEventListener('click', () => {
        color.classList.toggle('active')
        filter__color.classList.toggle('active__filter')
    })

    let size = document.getElementById('size'),
    filter__size = document.getElementById('filter__size')
    size.addEventListener('click', () => {
        size.classList.toggle('active')
        filter__size.classList.toggle('active__filter')
    })

    let price = document.getElementById('price'),
    filter__price = document.getElementById('filter__price')
    price.addEventListener('click', () => {
        price.classList.toggle('active')
        filter__price.classList.toggle('active__filter')
    })
    
    let brand = document.getElementById('brand'),
    filter__brand = document.getElementById('filter__brand')
    brand.addEventListener('click', () => {
        brand.classList.toggle('active')
        filter__brand.classList.toggle('active__filter')
    })

    let discount = document.getElementById('discount'),
    filter__discount = document.getElementById('filter__discount')
    discount.addEventListener('click', () => {
        discount.classList.toggle('active')
        filter__discount.classList.toggle('active__filter')
    })
}

filter()