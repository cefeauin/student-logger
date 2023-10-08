<div>
	<div class="grid grid-cols-2 gap-4">
		<x-card>
			Total Number Students
		</x-card>
		<x-card>
			Pie Chart of Students per Dept.
		</x-card>
	</div>

	<div class="flex justify-between mt-4">
		@include('livewire.includes.search')

		@can('create students')
			<x-button wire:click.prevent="create" btnType="success" class="flex space-x-2 items-center">
				<i class="fa-solid fa-plus"></i>
				<span>Add New Student</span>
			</x-button>
		@endcan
	</div>
	
	{{-- Table --}}
	<x-table class="mt-4">
		@slot('head')
			<th class="px-6 py-4">Student No.</th>
			<th class="px-6 py-4">Last Name</th>
			<th class="px-6 py-4">First Name</th>
			<th class="px-6 py-4">Middle Name</th>
			<th class="px-6 py-4">Action</th>
		@endslot

		@slot('data')
			@foreach ($students as $student)
				<tr wire:key="{{ $student->id }}" class="text-sm border-b border-lightGray transition-all hover:bg-veryLightGreen">
					<td class="px-6 py-4">{{ $student->student_no }}</td>
					<td class="px-6 py-4">{{ $student->last_name }}</td>
					<td class="px-6 py-4">{{ $student->first_name }}</td>
					<td class="px-6 py-4">{{ empty($student->middle_name) ? "N/A" : $student->middle_name }}</td>
					<td class="px-6 py-4 text-md flex space-x-4">
						@can('view students')
							<x-button wire:click.prevent="show({{$student->id}})" btnType="success" textSize="text-xs">
								View
							</x-button>
						@endcan
						@can('edit students')
							<x-button wire:click.prevent="edit({{$student->id}})" btnType="warning" textSize="text-xs">
								Edit
							</x-button>
						@endcan
						@can('delete students')
							<x-button wire:click.prevent="delete({{$student->id}})" btnType="danger" textSize="text-xs">
								Delete
							</x-button>
						@endcan
					</td>
				</tr>
			@endforeach
		@endslot			
	</x-table>

	{{-- Pagination Links --}}
	<div class="mt-4">
		{{ $students->links() }}
	</div>

	{{-- Create Student Form --}}
	@can('create students')
		<x-modal name="create-student" title="Add Student" focusable>
			@include('livewire.includes.students-form')
		</x-modal>
	@endcan

	{{-- View Student Form --}}
	@can('view students')
		<x-modal name="show-student" title="Student Information" focusable>
			<div>
				{{ $first_name. ' ' .$middle_name. ' ' .$last_name }}
			</div>
			
			Student Number: {{ $student_no }} <br>
			Sex: {{ $sex }} <br>
			Civil Status: {{ $civil_status }} <br>
			Nationality: {{ $nationality }} <br>
			Date of Birth: {{ $birthdate }} <br>
			Place of Birth: {{ $birthplace }} <br>
			Address: {{ $address }} <br>
			Phone Number: {{ $phone }} <br>
			Email: {{ $email }} <br>
			Account Type: {{ $account_type }}

			<div class="flex justify-end items-center mt-4">
				<x-button 
					x-on:click.prevent="$dispatch('close-modal')" 
					btnType="secondary"
					wire:loading.attr="disabled">
					Close
				</x-button>
			</div>
		</x-modal>
	@endcan

	{{-- Edit Student Form --}}
	@can('edit students')
		<x-modal name="edit-student" title="Edit Student" focusable>
			@include('livewire.includes.students-form')
		</x-modal>
	@endcan

	{{-- Delete Student Dialog --}}
	@can('delete students')
		<x-modal name="delete-student" title="Delete Student" focusable>
		</x-modal>
	@endcan

	@include('livewire.includes.toasts')
</div>    