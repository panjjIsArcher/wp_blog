const reCalc = (designWidth = 1920, maxWidth = 1920) => {
  let doc = document;
  let win = window;
  let docEl = doc.documentElement;
  let tid;
  let rootItem;
  let rootStyle;

  function refreshRem() {
    let width = docEl.getBoundingClientRect().width;
    if (!maxWidth) {
      maxWidth = 540;
    }
    if (width > maxWidth) {
      width = maxWidth;
    }
    //与淘宝做法不同，直接采用简单的rem换算方法1rem=100px
    let rem = (width * 100) / designWidth;
    //兼容UC开始
    rootStyle = "html{font-size:" + rem + "px}";
    rootItem =
      document.getElementById("rootsize") || document.createElement("style");
    if (!document.getElementById("rootsize")) {
      document.getElementsByTagName("head")[0].appendChild(rootItem);
      rootItem.id = "rootsize";
    }
    if (rootItem.styleSheet) {
      rootItem.styleSheet.disabled || (rootItem.styleSheet.cssText = rootStyle);
    } else {
      try {
        rootItem.innerHTML = rootStyle;
      } catch (f) {
        rootItem.innerText = rootStyle;
      }
    }
    //兼容UC结束
    docEl.style.fontSize = rem + "px";
    console.log(`1rem=${rem}px`);
  }
  refreshRem();

  win.addEventListener(
    "resize",
    function () {
      clearTimeout(tid); //防止执行两次
      tid = setTimeout(refreshRem, 300);
    },
    false
  );

  win.addEventListener(
    "pageshow",
    function (e) {
      if (e.persisted) {
        // 浏览器后退的时候重新计算
        clearTimeout(tid);
        tid = setTimeout(refreshRem, 300);
      }
    },
    false
  );

  if (doc.readyState === "complete") {
    doc.body.style.fontSize = "16px";
  } else {
    doc.addEventListener(
      "DOMContentLoaded",
      function () {
        doc.body.style.fontSize = "16px";
      },
      false
    );
  }
};

reCalc(375,414);
