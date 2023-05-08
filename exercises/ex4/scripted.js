const shirtLink = document.getElementById('shirt-link');

const blackOption = document.getElementById('black');
const whiteOption = document.getElementById('white');
const orangeOption = document.getElementById('orange');

blackOption.addEventListener('change', () => {
	shirtLink.style.backgroundImage = "url('https://img.ltwebstatic.com/images3_pi/2021/10/13/1634104962e9b04813ab43d6d7a857308bd74889d9_thumbnail_900x.webp')";
});

whiteOption.addEventListener('change', () => {
	shirtLink.style.backgroundImage = "url('https://img.ltwebstatic.com/images3_pi/2022/06/23/16559481529883fc793f508747b7851078090cfdb3_thumbnail_900x.webp')";
});

orangeOption.addEventListener('change', () => {
	shirtLink.style.backgroundImage = "url('https://img.ltwebstatic.com/images3_pi/2022/09/02/1662112992b97021451949480e1e49c55a18868934.webp')";
});

