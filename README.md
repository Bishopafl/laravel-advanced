# Advanced Learning of Laravel 9
This is just some notes from the class I'm taking. Learning some tips and tricks from beginner to advanced with a course from udemy. 


## Controller Notes

for updating paginated queries to the model, use something like: 

`Post::select('COLUMN_NAME', 'COLUMN_NAME', 'COLUMN_NAME')->paginate();`

Or if you are doing something a little smaller scale:

`Post::find([1,2,3], ['COLUMN_NAME', 'COLUMN_NAME', 'COLUMN_NAME']);`