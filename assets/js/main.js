const miniMenu = document.getElementById('mini_menu');
const boutonMenu = document.querySelector('.menu_toggle')

const openModalCreate = () => {
	document.getElementById('modal_create').classList.remove('hidden');
	document.getElementById('noir_modal').classList.remove('hidden');
};

const closeModalCreate = () => {
	document.getElementById('modal_create').classList.add('hidden');
	document.getElementById('noir_modal').classList.add('hidden');
};

const toggleMiniMenu = () => {
    if (miniMenu.style.display === "none") {
        miniMenu.style.display = "block";
    }

    else {
        miniMenu.style.display = "none";
    }
};

document.getElementById('float_btn').addEventListener('click',openModalCreate);
document.getElementById('noir_modal').addEventListener('click',closeModalCreate);
boutonMenu.addEventListener('click', toggleMiniMenu);