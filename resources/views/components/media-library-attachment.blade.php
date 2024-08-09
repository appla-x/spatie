<livewire:media-library
    :key="'media-library-component' . $name"
    :media="$media"
    :name="$name"
    :rules="$rules"
    :accept="$accept"
    :multiple="$multiple"
    :maxItems="$determineMaxItems()"
    :view="$componentView ?? null"
    :sortable="false"
    :listView="$determineListViewName()"
    :itemView="$determineItemViewName()"
    :propertiesView="$propertiesView ?? null"
    :fieldsView="$determineFieldsViewName()"
    :editableName="$editableName"
/>
