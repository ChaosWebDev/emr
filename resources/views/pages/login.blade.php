<main id="login">
    <form wire:submit.prevent='login'>
        <fieldset>
            <legend>Please log in</legend>

            <label for="username">Username</label>
            <input type="text" wire:model='username' name="username" id="username" autofocus autocomplete='username'>

            <label for="password">Password</label>
            <input type="password" wire:model='password' name="password" id="password" autocomplete='off'>

            <label for="remember" class="remember">
                <span>Remember Me</span>
                <input type="checkbox" wire:model='remember' name="remember" id="remember">
            </label>

            @if ($displayMessage)
                <div class="error">
                    {{ $message }}
                </div>
            @endif


            <input type="submit" value="Log In">
        </fieldset>
    </form>
</main>
