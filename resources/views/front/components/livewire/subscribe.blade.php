<form wire:submit.prevent='submit'>
    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" wire:model='email' type="email" placeholder="Enter Your Email"
        style="height: 48px;">
        <x-message.error name="email"></x-message.error>
    <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
            class="fa fa-paper-plane text-primary fs-4"></i></button>
</form>