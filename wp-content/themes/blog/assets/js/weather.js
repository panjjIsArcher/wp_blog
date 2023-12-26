
const weather = ["snow", "flower", "rain", "heaevyRain"]

const Random = (min = 0, max = 1) => {
    return Math.round(Math.random() * (max - min)) + min;
}


const changeWeather = (index) => {
    const calssIndex = index % weather.length;
    const className = weather[calssIndex];
    const weatherContainer = document.querySelector("#mask");
    if (!weatherContainer) {
        return
    }

    // 清楚子元素
    weatherContainer.innerHTML = ""

    weatherContainer.removeAttribute("class")
    weatherContainer.setAttribute("class", `weather-container full-screec-style  weather-${className}`)

    // 新增子元素
    for (let i = 0; i < 20; i++) {
        const span = document.createElement("span")
        span.setAttribute("class", "spot")

        const opacity = Math.random()
        const left = Random(1, 100)
        const animationDuraiton = Random(1,10)
       
        span.setAttribute("style", `opacity:${opacity};left:${left}vw;animation-duration:${animationDuraiton}s`)

        weatherContainer.appendChild(span)

    }



}


const init = () => {
    const lists = document.querySelectorAll("#navId>li a")
    const ul = document.querySelector("#navId")
    ul.setAttribute("style", `width:${100 * lists.length}vw`);

    for (let i = 0; i < lists.length; i++) {
        const li = lists[i]
        const originHref = li.href;
        li.originHref = originHref
        li.href = "#"
        li.addEventListener("click", () => {
            changeWeather(i + 1)

            // 禁止跳转
            return false
        })

    }

}

init();