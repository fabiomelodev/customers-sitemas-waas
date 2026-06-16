<x-filament-widgets::widget>
    <x-filament::section>
        @for($i = 0; $i < 3; $i++)
            <x-filament::fieldset>
                <x-slot name="label">
                    Site
                </x-slot>

                <h3>
                    <strong>
                        Pendentes
                    </strong>
                </h3>

                <div class="inline-flex flex-col gap-4 mt-6">
                    <x-filament::badge :icon="Filament\Support\Icons\Heroicon::XMark" :color="'danger'">
                        Domínio
                    </x-filament::badge>

                    <x-filament::badge :icon="Filament\Support\Icons\Heroicon::XMark" :color="'danger'">
                        Whatsapp
                    </x-filament::badge>

                    <x-filament::badge :icon="Filament\Support\Icons\Heroicon::XMark" :color="'danger'">
                        Instagram
                    </x-filament::badge>

                    <x-filament::badge :icon="Filament\Support\Icons\Heroicon::XMark" :color="'danger'">
                        Facebook
                    </x-filament::badge>
                </div>
            </x-filament::fieldset>
        @endfor
    </x-filament::section>
</x-filament-widgets::widget>