<div >
    <button
    theme="dark" onclick="toggleDark()" id="darkmodeToggler" class="px-4 py-2 bg-gray-800 text-white rounded">
        Dark Mode
    </button>
</div>

@push('js')
<script>
function toggleDark() {
        var body = document.body;
        var element = document.getElementById('darkmodeToggler');
        var currentTheme = element.getAttribute('theme');
        var newTheme = (currentTheme === 'light') ? 'dark' : 'light';
        element.setAttribute('theme', newTheme);
        if (newTheme === 'dark') {
            body.classList.add('dark');
        } else {
            body.classList.remove('dark');
        }
        document.cookie = "theme=" + newTheme + ";path=/";
        element.innerText = (newTheme === 'dark') ? 'Light Mode' : 'Dark Mode';
    }
    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
    }
    var savedTheme = getCookie("theme");
    if (savedTheme) {
        document.getElementById('darkmodeToggler').setAttribute('theme', savedTheme);
        if (savedTheme === 'dark') {
            document.body.classList.add('dark');
            document.getElementById('darkmodeToggler').innerText = 'Light Mode';
        }
    }
</script>
@endpush
