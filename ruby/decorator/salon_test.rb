require "test/unit"
require_relative "salon"

class SalonTest < Test::Unit::TestCase
  # Fake test
  def test_provideService
    salon = Salon.new
    salon.provideService
  end
end