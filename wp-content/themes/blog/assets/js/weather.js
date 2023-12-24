const weather = ["snow", "flower", "rain", "heaevyRain"]

const changeWeather = (index) => {
    const calssIndex = index % weather.length;
    const className = weather[calssIndex]
    // const 
}


const init = () => {
    const lists = document.querySelectorAll("#navId>li a")
    console.log(lists)

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