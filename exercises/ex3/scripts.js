$(document).ready(function () {
    let num = 3;
    res(num);
    const padding = 230;
    let blackRectangleH = $(".box").height();
    let yBoxTop = parseInt($(".yBox").css("top"), 10);
    let bBoxTop = parseInt($(".bBox").css("top"), 10);
    $(".blackRectangle").click(function () {
        num += 3;
        res(num);
        blackRectangleH = $(".box").last().height();
        if (blackRectangleH >= $(window).width()) {
            return;
        }
        let totalHeight = blackRectangleH * 2 + padding; 
        yBoxTop += totalHeight; 
        bBoxTop += totalHeight; 
        $(".yBox").css("top", yBoxTop + "px"); 
        $(".bBox").css("top", bBoxTop + "px"); 
        $("nav, .blue").height(yBoxTop); 
    });
});
function res(num) {
    const main = $("main")[0];
    let commons = "<div class='mainDetails'>";
    const letters = Createlett(num/2); 
    for (i = 0; i < num; i++) {
        const  marginbottom = i * (-20) +230;
        const size = i * 20 + 80;
        const letter = letters[i];
        commons += `<div class='box' style='width: ${size}px; height: ${size}px; margin-bottom: ${marginbottom};'><div class='lett' style='display: none;font-size: ${size / 2}px;top: ${size / 2}px;left: ${size / 2}px;line-height: ${size}px;'>${letter}</div></div>`;
    }
    commons += "</div>";
    main.innerHTML = commons;
    var click = 0;
    var seen = [];
    var lettSeen = [];
    $(".box").click(function () {
        click++;
        $(this).find(".lett").show();
        lettSeen.push($(this));
        seen.push($(this).find(".lett").text());
        if(click === 2){
            if ($(this)[0] === lettSeen[0][0]) { 
                lettSeen.pop().find(".lett").hide();
            }
            else if(seen[0] !== seen[1]){        
                lettSeen.pop().find(".lett").hide();
                lettSeen.pop().find(".lett").hide();
            }
            else{                           
                lettSeen[0].closest(".box").css("background-color", "#2abd25");
                lettSeen[1].closest(".box").css("background-color", "#2abd25");
                $(lettSeen.pop()).off("click");
                $(lettSeen.pop()).off("click");
            }
            seen.splice(0, seen.length);
            lettSeen.splice(0, lettSeen.length);
            click = 0;
        }
        });
}
function Createlett(num) {
    let letts = [];
    let alps = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for (i = 0; i < num; i++) {
        const lett = alps.charAt(Math.floor(Math.random() * alps.length));
        letts.push(lett);
        letts.push(lett);
    }
    MixingA(letts);
    return letts;
}
function MixingA(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}
