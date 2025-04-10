<div>
    <div class="rounded-lg bg-gray-800 mb-12 px-6">
        <pre class="scrollbar-none">
            <code class="scrolling-touch language-php">
namespace App\Http\Livewire\Tables;

use Coryrose\LivewireTables\LivewireModelTable;
use Livewire\WithPagination;
use App\User;

class UsersTable extends LivewireModelTable
{
    use WithPagination;

    public $paginate = {{ $paginate ? 'true' : 'false' }};
    public $pagination = 10;
    public $hasSearch = true;

    public $fields = [
        [
            'title' => 'ID',
            'name' => 'id',
            'header_class' => '',
            'cell_class' => '',
            'sortable' => true,
            'searchable' => true,
        ],
        [
            'title' => 'Name',
            'name' => 'name',
            'header_class' => '',
            'cell_class' => '',
            'sortable' => true,
            'searchable' => true,
        ],
        [
            'title' => 'City',
            'name' => 'address.city',
            'header_class' => 'bolded',
            'cell_class' => 'bolded bg-green',
            'sortable' => true,
            'searchable' => true,
        ],
    ];

    public function render()
    {
        return view('livewire.tables.users-table', [
            'fields' => $this->fields,
            'rowData' => $this->query(),
        ]);
    }

    public function model()
    {
        return User::class;
    }

    public function with()
    {
        return ['address'];
    }
}
            </code>
        </pre>
    </div>
</div>
