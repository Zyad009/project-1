<form class="mb-3" wire:submit.prevent='submit'>
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email </label>
        <input type="text" class="form-control" wire:model.blur='email' placeholder="Enter your email" />
        <x-message.error name="email"></x-message.error>
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
        </div>
        <div class="input-group input-group-merge">
            <input type="password" class="form-control" wire:model.blur='password'
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        <x-message.error name="password"></x-message.error>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" wire:model='remember' type="checkbox" id="remember-me" />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>
    <div class="mb-3">
        <x-button.submit name="Sign in"></x-button.submit>
    </div>
</form>