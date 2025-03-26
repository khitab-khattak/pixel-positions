<x-layout>
    <x-page-heading>
        New Job
    </x-page-heading>
    <x-forms.form method="POST" action="/jobs">

        <x-forms.input label="Title" name='title' placeholder="Ceo" />
        <x-forms.input label="Salary" name='salary' placeholder="$50,000 USD" />
        <x-forms.input label="Location" name='location' placeholder="Winter Park"/>

        <x-forms.select label="Schedule" name='schedule' placeholder="full/part">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select> 
        <x-forms.input label="Url" name='url' placeholder="http.com" />
        <x-forms.checkbox label="Featured (Costs Extra) " name="featured" />
        <x-forms.divider/>
        <x-forms.input label="Tags (comma separated)" name="tags[]" placeholder="laravel, vue, php" />
        

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
