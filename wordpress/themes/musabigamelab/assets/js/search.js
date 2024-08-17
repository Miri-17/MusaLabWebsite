window.addEventListener('load', function() {
    const headerSearchText = document.getElementById('header-search-text');
    const searchText = document.getElementById('search-text');
    const mediaQueryList = matchMedia('(min-width:873px)');

    console.log("headerSearchText:", headerSearchText);
    console.log("searchText:", searchText);

    if (!headerSearchText) {
        return false; 
    }
    
    function handleHeaderSearchFocus() {
        this.placeholder = 'キーワードで検索！';

        if (matchMedia('(min-width:873px)').matches) {
            // console.log('フォーカスされた瞬間すでに画面幅が873px以上');
            document.querySelector('.gnav-list').style.display = 'none';
        }
    }
    
    function handleHeaderSearchBlur() {
        this.placeholder = '';
        this.value = '';

        if (matchMedia('(min-width:873px)').matches) {
            // console.log('フォーカスが終わった瞬間すでに画面幅が873px以上');
            document.querySelector('.gnav-list').style.display = 'flex';
        }
    }
    
    headerSearchText.addEventListener('focus', handleHeaderSearchFocus);
    headerSearchText.addEventListener('blur', handleHeaderSearchBlur);

    mediaQueryList.addEventListener('change', (e) => {
        if (e.matches) {
            if (document.activeElement === headerSearchText) {
                // console.log('画面幅が873px以上になった瞬間すでにフォーカスされている');
                document.querySelector('.gnav-list').style.display = 'none';
            }
        } else {
            if (document.activeElement === headerSearchText) {
                // console.log('画面幅が873px未満になった瞬間すでにフォーカスされている');
                document.querySelector('.gnav-list').style.display = 'flex';
            }
        }
    });

    if (!searchText) {
        return false; 
    }

    function handleSearchFocus() {
        this.placeholder = 'キーワードで検索！';
    }

    function handleSearchBlur() {
        this.placeholder = '';
        this.value = '';
    }

    searchText.addEventListener('focus', handleSearchFocus);
    searchText.addEventListener('blur', handleSearchBlur);
});
