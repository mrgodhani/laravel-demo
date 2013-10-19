# A sample Guardfile
# More info at https://github.com/guard/guard#readme

guard 'sass', :input => 'sass', :output => 'css'

guard 'less', :all_on_start => true, :all_after_change => true do
  watch(%r{^.+\.less$})
end

guard 'coffeescript', :input => 'app/assets/javascripts'

guard 'uglify', :destination_file => "public/javascripts/application.js" do
  watch (%r{app/assets/javascripts/application.js})
end
