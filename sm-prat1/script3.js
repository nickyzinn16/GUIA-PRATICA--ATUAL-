
async function saveCookies() {
    if('cookieStore' in window) {
        await cookieStore.set({
            name: 'theme',
            value: 'dark2',
            sameSite: 'strict',
            expires: Date.now() + 800000
        });

    }
} 


async function saveCookies() {
    if('cookieStore' in window) {
        const cookie = await cookieStore.get('theme');
        console.log(cookie.value);
    }

} 

saveCookies()

cookieStore.set({
    name: 'theme',
    value: 'dark2',
    sameSite: 'strict',
    expires: Date.now() + 800000
}).then((res) => {
    cookieStore.get('theme').then(cookie => {
        console.log(cookieValue);
    });
}).catch((err) => {
    console.log(err);
})




